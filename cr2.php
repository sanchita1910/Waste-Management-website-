<?php
if(isset($_POST['submit'])){

     include("000connection.php");
    

    
    $a=$_POST['a'];
     $b=$_POST['b'];
     $c=$_POST['c'];
    $d=$_POST['d'];
     $e=$_POST['e'];
     $f=$_POST['f'];
    $details=$_POST['details'];
        $address=$_POST['address'];
    $name=$_POST['name'];
     $ceo=$_POST['ceo'];
     $number=$_POST['number'];
     $password=md5($_POST['password']);
 
$sql="INSERT INTO com_record (name,ceo,number,address,password,a,b,c,d,e,f,details) VALUES ('$name','$ceo',$number,'$address','$password','$a','$b','$c','$d','$e','$f','$details')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "your data is updated in our database...";
    header("Refresh: 5,url=cr.php");
}
  
    }
    else
    {
        echo"sorry";
        header("Refresh: 5,url=cr.php");
        
    }
   
    ?>
