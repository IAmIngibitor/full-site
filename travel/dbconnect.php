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
    echo('<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>');
    $result = $conn->query("SELECT 'Login' FROM users WHERE 'Name' = 'Иван'");
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<p>{$row['Login']}</p>";
    }
    echo('</body>
    </html>');
?>