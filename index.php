<?php
require_once "class/Reservas.class.php";
require_once "config/DBConnection.class.php";

$db = new DBConnection();
$reservas = new Reservas($db->getConnection());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Reservas</h1>
        <a href="reservar.php">Adicionar Reserva</a><br><br>
        <form method="get">
            <label for="ano">Ano:</label>
            <select name="ano" id="ano">
                <option value="">Selecione Ano</option>
                <?php for ($ano = date("Y"); $ano >= 2000; $ano--) : ?>
                    <option><?php echo $ano; ?></option>
                <?php endfor; ?>
            </select>

            <label for="mes">Mês</label>
            <select name="mes" id="mes">
                <option value="">Selecione Mês</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
            <input type="submit" value="Mostrar">
        </form>
        <?php
        if (empty($_GET["ano"])) {
            exit;
        }

        $data = addslashes($_GET["ano"]) . "-" . addslashes($_GET["mes"]);
        $primeiroDiaSemana = date("w", strtotime($data));
        $qtdDiasMes = date("t", strtotime($data));
        $linhas = ceil(($primeiroDiaSemana + $qtdDiasMes) / 7);
        $primeiroDiaSemana = -$primeiroDiaSemana;
        $dataInicio = date("Y-m-d", strtotime($primeiroDiaSemana . " days", strtotime($data)));
        $dataFim = date("Y-m-d", strtotime((($primeiroDiaSemana + ($linhas * 7) - 1)) . "days", strtotime($data)));

        $lista = $reservas->getReservas($dataInicio, $dataFim);
        ?>
        <?php require_once "calendario.php" ?>
    </div>
</body>

</html>