<?php
error_reporting(0);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailaddress = $_POST['emailaddress'];
$phonenumber = $_POST['phonenumber'];
$birthdate = $_POST["birthdate"];
$gender = $_POST['gender'];
$address = $_POST["address"];
$country = $_POST['country'];
$city = $_POST['city'];
$region = $_POST['region'];
$postalcode = $_POST['postalcode'];


$conn = new mysqli('localhost', 'root', '', 'project');

if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}

else{
  

    $sql = "INSERT INTO register_form (firstname, lastname, emailaddress,phonenumber, birthdate, gender, address, country, city, region, postalcode)
VALUES ('$firstname', '$lastname', '$emailaddress', '$phonenumber', '$birthdate', '$gender', '$address', '$country', '$city', '$region', '$postalcode')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



}


?>