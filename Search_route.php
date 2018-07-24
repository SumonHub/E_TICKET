<html>
<head>
<link rel="stylesheet" href="css/styles_search.css">
</head>
</html>
<?php

$FromStation=$_POST["station_from"];
$ToStation=$_POST["station_to"];

$con=mysqli_connect("localhost","root","");
    if($con==false) 
        die("could not connect");
    if(!(mysqli_select_db($con,"e_ticket")))
        echo "could not connect_db";

$sql= "select * from train where from_place='$FromStation' and to_place='$ToStation' ";
if(!($result1= mysqli_query($con,"$sql"))) 
    {echo "problem loading";}
$row1 = mysqli_fetch_array($result1);


echo "

<html>
<header>
    <link href='css/style.css' rel='stylesheet'>
</header>

<table>
    <thead>
        <tr>
            <th><h2>Available Trains</h2></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Train Name</td>
            <td>".$row1['name']."</td>
            
        </tr>
        <tr>
            <td>Capacity</td>
            <td>".$row1['capacity']."</td>
           
        </tr>
        <tr>
            <td>Station </td>
            <td>".$row1['from_place']." - ".$row1['to_place']."</td>
            
        </tr>
        <tr>
            <td>Departure Time</td>
            <td>".$row1['DepartureTime']."</td>
            
        </tr>
        <tr>
            <td>Fare</td>
            <td>".$row1['Fare']."</td>
            
        </tr>
        
    </tbody>
</table>
</html>";        							
?>