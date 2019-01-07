<?php
		include_once 'formtest.html';
		require_once 'login.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['myTest']) ? $_POST['myTest'] : false;
		if ($option){
			$testField = $_POST['myTest'];
			$query ="	select ". $testField . " from users;";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row[$testfield] . "<br>";
			}
		}
		$result->close();
		$conn->close();
?>