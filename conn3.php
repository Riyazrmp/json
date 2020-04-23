<?php

$connect =new mysqli("127.0.0.2","bellbird_Medusa","rampur123","bellbird_Medusa");

if($connect){
	 	echo "Connection Successfull";

}else{
	echo "Connection Failed";
	exit();
}

