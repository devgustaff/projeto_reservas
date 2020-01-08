<?php
class DBConnection
{
    private $dsn = "mysql:host=localhost;dbname=projeto_reservas";
    private $dbuser = "root";
    private $dbpass = "";
    private $pdo = null;

    public function getConnection()
    {
        try {
            $this->pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
        return $this->pdo;
    }
}
