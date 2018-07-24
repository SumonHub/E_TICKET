<html>
<head>
<link rel="stylesheet" href="css/styles_search.css">
</head>
</html>
<?php

$email=$_POST["email"];

$con=mysqli_connect("localhost","root","");
    if($con==false) 
        die("could not connect");
    if(!(mysqli_select_db($con,"e_ticket")))
        echo "could not connect_db";

$sql= "select * from passenger where email='$email' ";
if(!($result= mysqli_query($con,"$sql"))) 
    {echo "problem1 loading";}
$row = mysqli_fetch_array($result);
    $CustomerID= $row['CustomerID'];
    echo "<h1>done<h1>" ;

$sql1= "delete from ticket where CustomerID='$CustomerID' ";
if(!($result1= mysqli_query($con,"$sql1"))) 
    {echo "problem2 loading";}				
?>