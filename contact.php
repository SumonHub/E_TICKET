<?php
	
	$Uname= $_POST["name"];
	$Email= $_POST["email"];
	$FromPlace= $_POST["station_from"];
	$ToPlace= $_POST["station_to"];
	$TrainName= $_POST['train_name'] ;
	$NumberOfSeat= $_POST["NumOfSeat"];

	$con=mysqli_connect("localhost","root","");
	if(!(mysqli_select_db($con,"e_ticket")))
   			echo "could not connect_db";

		
	//$sql0 = "select name from train where from_place = '$$FromPlace' and to_place = '$ToPlace'";
		
		$sql= "insert into passenger values('','$Uname','$Email')";
	if(!($result= mysqli_query($con,"$sql"))) 
    	echo "problem loading1";

    $sql1= "select CustomerID from passenger where email= '$Email'";
	if(!($result= mysqli_query($con,"$sql1"))) 
    	echo "problem loading2";
    $row = mysqli_fetch_array($result);
    $CustomerID= $row['CustomerID'];

    $sql2= "select DepartureTime,Fare from train where name= '$TrainName'";
	if(!($result= mysqli_query($con,"$sql2"))) 
    	echo "problem loading3";
    $row = mysqli_fetch_array($result);
    $TotalFare= $row['Fare']*$NumberOfSeat;
    $DepartureTime= $row['DepartureTime'];

    $sql= "insert into ticket values('','$CustomerID','$TrainName','$FromPlace','$ToPlace','','$DepartureTime','$NumberOfSeat','$TotalFare')";
	if(!($result= mysqli_query($con,"$sql"))) 
    	echo "problem loading4";
echo "

<html>
<header>
    <link href='css/style.css' rel='stylesheet'>
</header>

<table>
    <thead>
        <tr>
            <th>Invoice</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Name</td>
            <td>".$Uname."</td>
            
        </tr>
        <tr>
            <td>Email</td>
            <td>".$Email."</td>
           
        </tr>
        <tr>
            <td>Station</td>
            <td>".$FromPlace." - ".$ToPlace."</td>
            
        </tr>
        <tr>
            <td>Train Name</td>
            <td>".$TrainName."</td>
            
        </tr>
        <tr>
            <td>Number Of Seat</td>
            <td>".$NumberOfSeat."</td>
            
        </tr>
        <tr>
            <td>Fare</td>
            <td>".$TotalFare."</td>
            
        </tr>
		<tr>
            <td>DepartureTime</td>
            <td>".$DepartureTime."</td>
            
        </tr>
    </tbody>
</table>
</html>"
	

?>