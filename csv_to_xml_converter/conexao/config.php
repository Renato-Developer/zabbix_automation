<?php

$conn = "mysql:dbname=edd;host=localhost";
$dbuser = "root";
$dbpass = "adm@superuser";

try {
    $pdo = new PDO($conn, $dbuser, $dbpass);
} catch (PDOException $th) {
    die($th->getMessage());
}



?>
