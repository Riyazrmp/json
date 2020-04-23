<?php
$dns = ‘mysql:host=localhost;dbname=enter-database-name’;
$user = ‘bellbird_Medusa’;
$password = ‘rampur123’;
try{
 $db = new PDO ($dns, $user, $pass);
}catch( PDOException $e){
 $error = $e->getMessage();
 echo $error;
}