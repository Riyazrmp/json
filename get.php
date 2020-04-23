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
$query = 'SELECT * FROM users';
$stm = $db->prepare($query);
$stm->execute();
$row = $stm->fetch(PDO::FETCH_ASSOC);
echo json_encode($row);
?>
