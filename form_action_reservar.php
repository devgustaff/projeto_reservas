<?php
require_once "class/Reservas.class.php";
require_once "config/DBConnection.class.php";

$db = new DBConnection();
$reservas = new Reservas($db->getConnection());

if (!empty($_POST["carro"])) {
    $carro = addslashes($_POST["carro"]);
    $data_inicio = addslashes($_POST["data_inicio"]);
    $data_fim = addslashes($_POST["data_fim"]);
    $pessoa = addslashes($_POST["pessoa"]);

    if ($reservas->verificarDisponibilidade($carro, $data_inicio, $data_fim)) {
        $reservas->reservar($carro, $data_inicio, $data_fim, $pessoa);
        header("Location: index.php");
    } else {
        echo
            "<script>
                window.location = 'reservar.php'
                alert('Este veículo já está reservado nesse período.')
            </script>";
    }
} else {
    echo
        "<script>
            window.location = 'reservar.php'
            alert('Insira os campos')
        </script>";
}
