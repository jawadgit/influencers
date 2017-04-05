<?php require_once('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Infleuncers</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
	<body class="container">
		<h1>Influencers</h1>
		<form action="getCountryCityByLatLong.php" method="post">
		  <div class="form-group">
			<label for="latitude">Enter Latitude</label>
			<input type="text" name="latitude" class="form-control" required id="latitude" value="<?php if(isset($_POST['latitude'])){echo $_POST['latitude'];} ?>">
		  </div>
		  <div class="form-group">
			<label for="longitude">Enter Longitude</label>
			<input type="text" name="longitude" class="form-control" required id="longitude" value="<?php if(isset($_POST['longitude'])){echo $_POST['longitude'];} ?>">
		  </div>
		  <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</body>
</html>