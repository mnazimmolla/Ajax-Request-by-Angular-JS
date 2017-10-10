<?php 
	$ClientData = file_get_contents('php://input');
	$array = json_decode($ClientData);
	$data = $array->myName;
	echo "Data Inserted";
?>