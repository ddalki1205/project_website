<?php
class Database {
    private $connection;

    public function __construct(){
        $this->connect();
    }

    private function connect() {
        $config = include '../../config/database.php';
        $host = $config['host'];
        $user = $config['user'];
        $password = $config['password'];
        $database = $config['db_name'];

        $this->connection = mysqli_connect($host, $user, $password, $database);

        if (!$this->connection) {
            die('Connection failed: ' . mysqli_connect_error());
        }
    }
    public function getConnection() {
        return $this->connection;
    }

    public function query($query) {
        return mysqli_query($this->connection, $query);
    }

    public function closeConnection() {
        mysqli_close($this->connection);
    }
    
    public function __destruct() {
        $this->closeConnection();
    }
}

/* put in http://localhost/phpmyadmin -> registration_system -> SQL query box
CREATE TABLE buildboard_users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    registration_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    PRIMARY KEY (id)
);
*/
?>