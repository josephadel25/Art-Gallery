<?php
class Connect {
    private static $instance;
    private $connection;

    private function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "artgallery";
        $this->connection = new mysqli($servername, $username, $password, $dbname);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Connect();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    // Other database methods...
}

?>