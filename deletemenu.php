<?php 
	include "db.php";
	$id=$_GET["id"];
	$sql = "DELETE FROM zeromenu WHERE id=$id" ;
	$query = mysqli_query($db_con,$sql);
	if($query){
		header("location:deletemenu.php");
	}else{
		echo "data silinmedi!!!";
	}