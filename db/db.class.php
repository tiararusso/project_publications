<?PHP

/**
 * Db Clase para trabajar con Bases de Datos usando PDO
 * 
 * 
 * @author Tiara Russo <tiararusso01@gmail.com>
 * @link https://github.com/tiararusso        
 * @version 1.0.0
 * @copyright 2024 
 * 
 */
class Db
{
    public $connection;
    public function __construct()
    {
        try {
            $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"];
            $this->connection = new PDO("mysql:host=" . SERVER_NAME . ";dbname=" . DATABASE_NAME, USER_NAME, PASSWORD, $options);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
        return $this->connection;
    }
    public function run($query, $args = NULL)
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($args);
        return $stmt;
    }
    public function prepare($query)
    {
        return $this->connection->prepare($query);
    }
    public function close()
    {
        $this->connection = null;
    }
    public function query($query)
{
        return $this->connection->query($query);
}
}

