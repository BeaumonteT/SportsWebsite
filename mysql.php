<?php

	$host = "127.0.0.1";
	$user = "beaut";
	$pass = "";
	$db = "c9";
	$port = 3306;

	$connection = mysqli connect($host, $user, $pass, $db, $port)or die(mysql error());