<?php
		include_once 'Sports.html';
		require_once 'login.php';
		echo $_Post['myTest'];
		$query = "SELECT * FROM sports";
		$result = mysqli_query($connection, $query);
		echo "<table><tr><th>Sport</th><th>Season</th><th>Location</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row["Sport"]."</td><td>".$row["Season"]."</td><td>".$row["Location"]."</td></tr>";
	}
echo "</table>"
?>