<?php
$dns = ‘mysql:host=localhost;dbname=bellbird_Medusa’;
$user = ‘bellbird_Medusa’;
$password = ‘rampur123’;
try{
 $db = new PDO ($dns, $user, $pass);
}catch( PDOException $e){
 $error = $e->getMessage();
 echo $error;
}
