<?php

class Database {
    private $host = "localhost";
    private $db_name = "app-perpus";
    private $username = "root";
    private $password = "";

    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            echo "Connected";

        } catch (PDOException $exception) {
            echo "KYS:" . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>