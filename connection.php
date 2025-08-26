<?php


$conn = new mysqli('localhost', 'root', '', 'project');

if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}

else{

  die("Connection Succesfull.");


}


?>