<?php
$host = 'localhost';
$dbName = 'influencers';
$username = 'root';
$password = '';
$dbCon = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);

// check for post request
if($_POST){
	if(isset($_POST['latitude'])){
		$latitude = $_POST['latitude'];
	} 	
	if(isset($_POST['longitude'])){
		$longitude = $_POST['longitude'];
	} 	

	// in this query  latitude and longitude is given and distance is calculated in miles
	$sql = 'SELECT
	  id,country,city, (
		3959 * acos (
		  cos ( radians('.$latitude.') )
		  * cos( radians( latitude ) )
		  * cos( radians( longitude ) - radians('.$longitude.') )
		  + sin ( radians('.$latitude.') )
		  * sin( radians( latitude ) )
		)
	  ) AS distance
	FROM location
	LIMIT 0 , 1';

$stmt = $dbCon->prepare($sql);
$stmt->execute();
$row = $stmt->fetch();

	$stmt = $dbCon->prepare($sql);
	$stmt->execute();
	$row = $stmt->fetch();

	echo "<br>";
	echo '<h1>Country: <i>'.$row['country'].'</i></h1>';
	echo '<h3>City: <i>'.$row['city'].'</i></h3>';
}


?>