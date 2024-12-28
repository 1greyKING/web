<?php
    function connectdb(){
        $servername = "fashion.czwei68so5if.ap-southeast-1.rds.amazonaws.com"; 
        $username = "admin";
        $password = "Haongu123";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=fashion", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        return $conn;
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
?>