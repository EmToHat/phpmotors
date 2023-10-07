<?php

/*
* Proxy Connection
*/

function phpmotorsConnect(){
 $server = 'localhost';
 $dbname= 'phpmotors';
 $username = 'iClient';
 $password = 'Cr(Kt0@36/EjxnVu'; 
 $dsn = "mysql:host=$server;dbname=$dbname";
 $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
 
 try {
    $link = new PDO($dsn, $username, $password, $options);
    return $link;
 } catch(PDOException $e) {
    header('Location: /phpmotors/view/500.php');
    exit;
 }
}
phpmotorsConnect();
?>