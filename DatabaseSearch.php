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
if(!($result1= mysqli_query($con,"$sql"))) 
    {echo "problem loading";}
$row1 = mysqli_fetch_array($result1);
$customerID= $row1['CustomerID'];


$sql= "select * from ticket where CustomerID='$customerID' ";

if(!($result= mysqli_query($con,"$sql"))) 
    {echo "problem loading";}
    
 $row = mysqli_fetch_array($result);

echo "

<html>
<header>
    <link href='css/style.css' rel='stylesheet'>
</header>

<table>
    <thead>
        <tr>
            <th><h2>Invoice</h2></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Name</td>
            <td>".$row1['name']."</td>
            
        </tr>
        <tr>
            <td>Email</td>
            <td>".$row1['email']."</td>
           
        </tr>
        <tr>
            <td>Station</td>
            <td>".$row['from_place']." - ".$row['to_place']."</td>
            
        </tr>
        <tr>
            <td>Train Name</td>
            <td>".$row['TrainName']."</td>
            
        </tr>
        <tr>
            <td>Number Of Seat</td>
            <td>".$row['NumberOfSeat']."</td>
            
        </tr>
        <tr>
            <td>Fare</td>
            <td>".$row['Total Fare']."</td>
            
        </tr>
    </tbody>
</table>
</html>";        							
?>