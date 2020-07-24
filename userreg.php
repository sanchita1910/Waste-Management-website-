<?php
if(isset($_POST['submit'])){

     include("000connection.php");
    

    
    $name=$_POST['name'];
     $number=$_POST['number'];
     $address=$_POST['address'];
    $city=$_POST['city'];
    
 
$sql="INSERT INTO user_data (name,number,address,city) VALUES ('$name',$number,'$address','$city')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "your data is updated in our database...";
    header("Refresh: 5,url=index.php");
}
  
    }
    else
    {
        echo"sorry";
        header("Refresh: 5,url=index.php");
        
    }
   
    ?>
