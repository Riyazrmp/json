<?php
include 'conn2.php';

$queryResult=$connect->query("SELECT * FROM users");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
