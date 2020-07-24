<?php
if(isset($_POST['submit'])){

include("000connection.php");

    $drivername = $_POST['name'];
    $drivernumber = $_POST['number'];
    $vanno = $_POST['vanno'];
    $password=md5($_POST['password']);

$sql="INSERT INTO van (drivername,drivernumber,vanno,password) VALUES ('$drivername',$drivernumber,'$vanno','$password')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "your data is updated in our database...now redirecting to final page";
    header("Refresh:2,url=vanreg.php");
}}
else{
   
     header("Refresh: 15,url=vanreg.php");
} ?>

