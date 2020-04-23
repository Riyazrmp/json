<?php

$connect = mysqli_connect("localhost","bellbird_Medusa","rampur123","bellbird_Medusa");

if($connect){
	 	echo "Connection Successfull";

}else{
	echo "Connection Failed";
	exit();
}

