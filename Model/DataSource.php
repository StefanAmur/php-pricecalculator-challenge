<?php

declare(strict_types=1);

class DataSource {
    private mysqli $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "parolaMariaDB";
        $database = "test";
        $this->conn = new mysqli($servername, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        echo "Connected successfully";
    }

    public function getCustomers() {
        $sql = "SELECT * FROM customer";
        $result = $this->conn->query($sql);
        $this->conn->close();
        return $result;
    }
}
