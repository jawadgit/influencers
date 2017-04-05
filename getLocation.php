<?php

$latitude = -33.7293882;
$longitude = -73.09314610000001;
$latitudeDMS = '';
$longitudeDMS = '';

echo "<h1>Latitude should be between 90 to -90 degree</h1>";
echo "<h1>Longitude shuold be between 180 to -180 degree</h1>";

// get latitude and longitude
function getLatitudeLongitude($latitude, $longitude){

	if( validateLatitude($latitude) == $latitude && validateLongitude($longitude) == $longitude ){
		// save latitude and longitude values in array
		$latlon['latitude']  = convertToDeegreeMinuteSecond($latitude);
		$latlon['longitude'] = convertToDeegreeMinuteSecond($longitude);
		return $latlon;
	}else{
		return "Langitude = " . validateLatitude($latitude) . ' <br> Longitude =  ' . validateLongitude($longitude);		

	}
}

// validate latitude and logitude values
function validateLatitude($latitude){
	if(is_numeric($latitude)){
		if( $latitude > -90 && $latitude < 90 ){
			return $latitude;
		}else{
			return 'Invalid Latitude. Latitude should be between 90 to -90 degree<br>';
		}
	}else{
		return 'Latitude should be numeric<br>';	
	}
}

function validateLongitude($longitude){
	if(is_numeric($longitude)){
		if( $longitude > -180 && $longitude < 180 ){
			return $longitude;
		}else{
			return 'Invalid longitude. longitude should be between 180 to -180 degree<br>';
		}
	}else{
		return 'longitude should be numeric<br>';	
	}
}

// convert decimal values into degree and minute and second values
function convertToDeegreeMinuteSecond($number){
	$degree = manipulateDecimal($number);
	$resultArray['degree'] = $degree[0];
	if(isset($degree[1])){
		$minute = manipulateDecimal($degree[1]);	
		$resultArray['minute'] = $minute[0];
		$resultArray['second'] = $minute[1];
	}
	return $resultArray;
}

// calculate minutes and seconds by multiplying each decimal value with 60 because 1 degree equals to 60 minutes or units
function manipulateDecimal($number){
	if( !is_float($number) ){
		$dms[] = $number;
	}else{
		$num = explode( '.', $number ); 
		$dms[]  = $num[0]; 
		$result = $number - $num[0];
		$dms[] = $result * 60;
	}
	return $dms;
}

$results = getLatitudeLongitude($latitude, $longitude);

if(isset($results['latitude']['degree']) && isset($results['longitude']['degree']) ){
	echo " <br> latitude in decimal = " . $latitude;
	$latitudeDMS .= "<br> latitude in degree = " .$results['latitude']['degree'];
	if(isset($results['latitude']['minute'])){
		$latitudeDMS .= " minute = " .$results['latitude']['minute'];
	}
	if(isset($results['latitude']['second'])){
		$latitudeDMS .= " second = " . $results['latitude']['second'];
	}
	if($results['latitude']['degree'] > 0){
		$pole = ' N';
	}else{
		$pole = ' S';
	}
	echo $latitudeDMS . $pole;
	echo " <br><br><br> longitude in decimal = " . $longitude;
	if(isset($results['longitude']['degree'])){
		$longitudeDMS .= "<br> longitude in degree = " . $results['longitude']['degree'];
	}
	if(isset($results['longitude']['minute'])){
		$longitudeDMS .= " minute = " . $results['longitude']['minute'];
	}
	if(isset($results['longitude']['second'])){
		$longitudeDMS .= " second = " . $results['longitude']['second'];
	}
	if($results['longitude']['degree'] > 0){
		$pole = ' E';
	}else{
		$pole = ' W';
	}
	echo $longitudeDMS . $pole;
}else{
	print_r($results);
}

?>