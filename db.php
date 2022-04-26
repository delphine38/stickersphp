<?php
$host = "localhost";
$userDB = "stickflock";
$passDB = "stickflock";
$Database = "stickflock69";

//MySQLi
$ConnectDB = mysqli_connect($host, $userDB, $passDB, $Database);

//PDO
try {
    $objetPdo = new PDO("mysql:host=" . $host . ";dbname=" . $Database, $userDB, $passDB);
    $objetPdo->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
} catch (PDOException $e) {
    echo $e;
}
