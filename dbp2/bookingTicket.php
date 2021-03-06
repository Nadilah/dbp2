<!DOCTYPE html>
<html>
<style>
        #header
        {
            padding:50px;
            text-align: center;
            font-family: 'Bebas Neue', cursive;
            background-color: black;
            color: white;
            font-size: 400%;
        }
        
        #description 
        {
            text-align: center;
            font-family:'Courier New', Courier, monospace;
            font-size: 100%;
        }
        
        table
        {  
            width: 800px;
            padding: 20px;
            font-size: 20px;
        }

        tr,td
        {
            width: 800px;
            padding: 20px;
            font-size: 20px;
        }
        
        #next
        {
            margin-top: 10px;
            margin-left: 50%;
            color: black;
            padding: 10px 25px; 
            font-size: 18px;
            cursor: pointer;
        }

        #next:hover
        {
            background-color: #708686;
            color: white;
        }

        select 
        { 
            width:330px; 
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

        .inlinebreak{
           
            background-color: rgb(0, 0, 0);
        }

    </style>
    <head>
        <title>Passenger Details</title>
    </head>
    <body>
        <div class="inlinebreak">
        <h1 id="header">Passenger Details</h1>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
        <div class="nav-bar">
            <a href="findReservation.php">Manage Flight</a>
            <a href="membershipRegistration.html">Membership Registration</a>
            <a href="bookingTicket.html">Booking ticket</a>
            <a href="flightList.php">Flight List</a>
            <a href="homepage.html">Home</a>
        </div>
        </div>
        <p id="description" >Welcome! Please fill in this form to book your tickets.</p>
        <form action="saveBooking.php" method="POST">
            <table align="center">
                <tr>
                    <td>First Name</td>
                    <td>:</td>
                    <td><input type="text" name="firstname" id="firstname" size="50" required></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>:</td>
                    <td><input type="text" name="lastname" id="lastname" size="50" required></td>
                </tr>
                <tr>
                    <td>Membership ID</td>
                    <td>:</td>
                    <td><input type="text" name="membershipID" id="membershipID" size="50" placeholder="if you had registered for membership" ></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" id="email" size="50" required></td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td>:</td>
                    <td><input type="text" name="phone_num" id="phone_num" size="50" required></td>
                </tr>
                <tr>
                    <td>Destination City</td>
                    <td>:</td>
                    <td><select id="city" name="city" required>
                        <option value="Bangkok">Bangkok, Thailand</option>
                        <option value="Jakarta">Jakarta, Indonesia</option>
                        <option value="Hat Yai">Hat Yai, Thailand</option>
                        <option value="Johor Bahru">Johor Bahru, Malaysia</option>
                        <option value="Kota Bharu">Kota Bharu, Malaysia</option>
                        <option value="Kuching">Kuching, Malaysia</option>
                        <option value="London">London, United Kingdom</option>
                        <option value="Phnom Penh">Phnom Penh, Cambodia</option>
                        <option value="Siem Reap">Siem Reap, Cambodia</option>
                        <option value="Kuala Terengganu">Kuala Terengganu, Malaysia</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Compartment Class</td>
                    <td>:</td>
                    <td><select id="compClass" name="compClass" required>
                        <option value="First">First Class</option>
                        <option value="Business">Business Class</option>
                        <option value="Economy">Economy Class</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Seat Number</td>
                    <td>:</td>
                    <td><select id="seatNum" name="seatNum" required>
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                        <option value="A4">A4</option>
                        <option value="A5">A5</option>
                        <option value="A6">A6</option>
                        <option value="A7">A7</option>
                        <option value="A8">A8</option>
                        <option value="A9">A9</option>
                        <option value="A10">A10</option>
                        <option value="A11">A11</option>
                        <option value="A12">A12</option>
                        <option value="A13">A13</option>
                        <option value="A14">A14</option>
                        <option value="A15">A15</option>
                        <option value="A16">A16</option>
                        <option value="A17">A17</option>
                        <option value="A18">A18</option>
                        <option value="A19">A19</option>
                        <option value="A20">A20</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="B4">B4</option>
                        <option value="B5">B5</option>
                        <option value="B6">B6</option>
                        <option value="B7">B7</option>
                        <option value="B8">B8</option>
                        <option value="B9">B9</option>
                        <option value="B10">B10</option>
                        <option value="B11">B11</option>
                        <option value="B12">B12</option>
                        <option value="B13">B13</option>
                        <option value="B14">B14</option>
                        <option value="B15">B15</option>
                        <option value="B16">B16</option>
                        <option value="B17">B17</option>
                        <option value="B18">B18</option>
                        <option value="B19">B19</option>
                        <option value="B20">B20</option>
                        <option value="C1">C1</option>
                        <option value="C2">C2</option>
                        <option value="C3">C3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="C7">C7</option>
                        <option value="C8">C8</option>
                        <option value="C9">C9</option>
                        <option value="C10">C10</option>
                        <option value="C11">C11</option>
                        <option value="C12">C12</option>
                        <option value="C13">C13</option>
                        <option value="C14">C14</option>
                        <option value="C15">C15</option>
                        <option value="C16">C16</option>
                        <option value="C17">C17</option>
                        <option value="C18">C18</option>
                        <option value="C19">C19</option>
                        <option value="C20">C20</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="D5">D5</option>
                        <option value="D6">D6</option>
                        <option value="D7">D7</option>
                        <option value="D8">D8</option>
                        <option value="D9">D9</option>
                        <option value="D10">D10</option>
                        <option value="D11">D11</option>
                        <option value="D12">D12</option>
                        <option value="D13">D13</option>
                        <option value="D14">D14</option>
                        <option value="D15">D15</option>
                        <option value="D16">D16</option>
                        <option value="D17">D17</option>
                        <option value="D18">D18</option>
                        <option value="D19">D19</option>
                        <option value="D20">D20</option>
                        
                    </select></td>
                </tr>
            </table>
            <button name="next" id="next" type="submit">Next</button>
        </form>
    </body>
</html>
