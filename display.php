<html>
    <head>
        <title>Display</title>
        <style>
            body
            {
                background:  rgb(1, 175, 160);;
            }
            table
            {
                background-color: aliceblue;
            }
            .update
            {
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 6px;
                height: 25x;
                width: 80px;
                font-weight: bold;
                cursor: pointer;
            }
            .delete
            {
                background-color: red;
                color: white;
                border: 0;
                outline: none;
                border-radius: 6px;
                height: 25x;
                width: 80px;
                font-weight: bold;
                cursor: pointer;
            }
       </style> 
    </head>
</html>

<?php
include("connect.php");
$query = "SELECT * FROM register_form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);


//echo $total;

if($total != 0)
{
    ?>

    <h2 align="center"><mark>Displaying Records</mark></h2>
   <center> 
    <table border="4" cellspacing="6" width="80%">
        <tr>
        <th>ID</th>
        <th> First Name</th>
        <th> Last Name</th>
        <th> Gender</th>
        <th> Phone Number</th>
        <th> Birthdate</th>
        <th> Email Address</th>
        <th> Address</th>
        <th> Country</th>
        <th> City</th>
        <th> Region</th>
        <th>Postal Code</th>
        <th>Operations</th>
</tr>

    <?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo "  <tr>
        <td>".$result['id']."</td>
        <td>".$result['firstname']."</td>
        <td>".$result['lastname']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['phonenumber']."</td>
        <td>".$result['birthdate']."</td>
        <td>".$result['emailaddress']."</td>
        <td>".$result['address']."</td>
        <td>".$result['country']."</td>
        <td>".$result['city']."</td>
        <td>".$result['region']."</td>
        <td>".$result['postalcode']."</td>


        <td><a href='update_design.php?id=$result[id]'><input
         type='submit' value='Update' class='update'></a>
         
        <a href='delete_design.php?id=$result[id]'><input
        type='submit' value='Delete'  class='delete'></a> </td>
    
    
    </tr>";

    }

    //echo "Table record founds";
}
else
{
  echo  "No records found";
}

?>
    </table>
   </center>