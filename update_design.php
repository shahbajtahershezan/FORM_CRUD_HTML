<?php
echo $_GET['id'] ;
echo $_GET['fn'] ;
echo $_GET['ln'] ;
echo $_GET['gn'] ;
echo $_GET['pn'] ;
echo $_GET['bt'] ;
echo $_GET['ea'] ;
echo $_GET['a'] ;
echo $_GET['c'] ;
echo $_GET['ct'] ;
echo $_GET['rg'] ;
echo $_GET['pc'] ;

?>

<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Update Form</title>
 
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <section class="container">
        <header>update Person's Form </header>
        <form action="connect.php" method="post" class="form">
            <div class="input-box">
                <label>First Name</label>
                <input type="text" name="firstname" placeholder="Enter first name" required />
            </div>

            <div class="input-box">
                <label>Last Name</label>
                <input type="text" name="lastname" placeholder="Enter last name" required />
            </div>
            


            <div class="input-box">
                <label>Email Address</label>
                <input type="text" name="emailaddress" placeholder="Enter email address" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="text" name="phonenumber" placeholder="Enter phone number" required />
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input type="date" name="birthdate" placeholder="Enter birth date" required />
                </div>
            </div>
            <div class="gender-box">
                <label>Gender</label>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender" value="male" checked />
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender" value="female" />
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="gender" value="o" />
                        <label for="check-other">Others</label>
                    </div>
                </div>
            </div>
            </div>
            <div class="input-box address">
                <label>Address</label>
                <input type="text" placeholder="Enter street address" name="address" required />

                <div class="column">
                        <div class="input-box">
                            <label>Country</label>
                            <input type="text" name="country" placeholder="Enter Country name" required />
                       
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>City</label>
                            <input type="text" name="city" placeholder="City" required />
                        </div>
                        </div>>
                        <div class="column">
                        <div class="input-box">
                            <label>Region</label>
                            <input type="text" name="region" placeholder=" Region" required />
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Postal Code</label>
                            <input type="text " name="postalcode" placeholder="Postal Code" required />
                        </div>
                        </div>

            </div>
            <button>Submit</button>
        </form>
    </section>
</body>

</html>

<?php


$conn = new mysqli('localhost', 'root', '', 'project');

if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}

else{

  die("Connection Succesfull.");


}


?>