<?php
    $servername = "mysql";
    $username = "root";
    $password = "root";
    $database = "db-php";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT id, nome FROM modulos ORDER BY id";
        foreach ($conn->query($sql) as $row) {
            echo $row['id'] . ' - '. $row['nome'] . "<br>";
        }
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>