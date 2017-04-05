# influencers


# db.php
	
	1- it contains configureation with database

# getCountryCityByLatLong.php	

	1- form is given
	2- enter latitude and longitude
	3- database query finds the nearest latitude and longitude by calculating distance
	4- country and city and latitude and longitude is shown on frontend

# getLocation.php	

	this file converts the decimal latitude and longitude into the degree minutes and secconds
	
# for example:

# 1- latitude decimal value = 27.7592

# 2- 27 is degree and seperate decimal value only = 0.7592

# 3- multiply this value with 60 units because each degree equals to 60 minutes = 0.7592 * 60 = 45.552

# 4- 45 is minute and seperate decimal value only = 0.552

# 3- multiply this value with 60 units because each minute equals to 60 seconds = 0.552 * 60 = 33.12

# final result will be 

# latitude decimal value 27.7592 <=> latitude degree minute second value 27 Degree 45 Minutes 33.12 Seconds N

# with the help of degree minute second we can easily get location name

# Thanks

