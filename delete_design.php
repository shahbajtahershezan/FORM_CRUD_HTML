<?php
include("connect.php")

$id = $_GET['id'];

$query ="DELETE FROM register_form  WHERE id ='$id' ";
$data = mysqli_query($conn, $query);

if($data)
{
    echo "Record Deleted";
}
else
{
    echo "Failed to Delete";
}
?>
