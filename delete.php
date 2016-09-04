<?php 
	include "db.php";
	$id=$_GET["id"];
	$sql = "DELETE FROM zeronews WHERE id=$id" ;
	$query = mysqli_query($db_con,$sql);
	if($query){
		header("location:admin.php");
	}else{
		echo "data silinmedi!!!";
	}