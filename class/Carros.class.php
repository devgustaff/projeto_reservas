<?php
class Carros
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getCarros()
    {
        $rows = array();

        $sql = "SELECT * FROM carros ORDER BY marca ASC";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            $rows = $sql->fetchAll();
        }

        return $rows;
    }
}
