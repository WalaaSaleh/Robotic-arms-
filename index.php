<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$slider1 = $_POST['slider1'];
	$slider2 = $_POST['slider2'];
	$slider3 = $_POST['slider3'];
	$slider4 = $_POST['slider4'];
	$slider5 = $_POST['slider5'];
	$slider6 = $_POST['slider6'];
	$servername = "localhost";
	$username = "root";
	$password = "123";
	$dbname = "slidersave";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO `slidersave` (`slider1`, `slider2`, `slider3`, `slider4`, `slider5`, `slider6`) VALUES ('". $slider1 ."', '". $slider2 ."', '". $slider3 ."', '". $slider4 ."', '". $slider5 ."', '". $slider6 ."');";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slider Save</title>
	<style type="text/css">
		th {
			padding: 10px;
		}
	</style>
</head>

<body>
	<form action="" method="POST">
		<table>
			<tr>
				<th>&nbsp;</th>
				<th>
					<input type="range" min="1" max="10" value="5" name="slider1" />
				</th>
				<th>
					<label for="slider1">1 Slider</label>
				</th>
			</tr>
			<tr>
				<th rowspan="2">
					<button type="submit">Save</button>
				</th>
				<th>
					<input type="range" min="1" max="10" value="5" name="slider2" />
				</th>
				<th>
					<label for="slider2">2 Slider</label>
				</th>
			</tr>
			<tr>
				<th>
					<input type="range" min="1" max="10" value="5" name="slider3" />
				</th>
				<th>
					<label for="slider3">3 Slider</label>
				</th>
			</tr>
			<tr>
				<th rowspan="2">
					<button class="play">Play</button>
				</th>
				<th>
					<input type="range" min="1" max="10" value="5" name="slider4" />
				</th>
				<th>
					<label for="slider4">4 Slider</label>
				</th>
			</tr>
			<tr>
				<th>
					<input type="range" min="1" max="10" value="5" name="slider5" />
				</th>
				<th>
					<label for="slider5">5 Slider</label>
				</th>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<th>
					<input type="range" min="1" max="10" value="5" name="slider6" />
				</th>
				<th>
					<label for="slider6">6 Slider</label>
				</th>
			</tr>
		</table>
	</form>
</body>
</html>