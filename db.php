<?php
		$host = "localhost";
		$user_name = "root";
		$password = "";
		$db_name = "zero";
		$db_con = mysqli_connect($host, $user_name, $password, $db_name);
		if(!$db_con){
			echo "error";
		}