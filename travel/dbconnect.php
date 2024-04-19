<?php
    $host = 'localhost';
    $port = 5431;
    $dbname = 'travel';
    $username = 'postgres';
    $password = '12345';
    
    try {
        $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
    echo "Connect YES";
?>
