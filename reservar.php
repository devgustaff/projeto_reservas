<?php
require_once "class/Carros.class.php";
require_once "config/DBConnection.class.php";

$db = new DBConnection();
$carros = new Carros($db->getConnection());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Adicionar Reservar</h1>
        <a href="index.php">Voltar</a><br><br>

        <div class="card col-8 m-auto bg-light">
            <div class="card-body">
                <form action="form_action_reservar.php" method="post" class="col-10 m-auto">
                    <div class="form-group">
                        <label for="carro">Carros:</label>
                        <select name="carro" id="carro" class="form-control">
                            <option value="">-- Selecione Carro --</option>
                            <?php foreach ($carros->getCarros() as $carro) : ?>
                                <option value="<?php echo $carro["id"]; ?>"><?php echo $carro["marca"] . " " . $carro["modelo"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="data_inicio">Data início:</label>
                        <input type="date" name="data_inicio" id="data_inicio" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="data_fim">Data fim:</label>
                        <input type="date" name="data_fim" id="data_fim" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nome_cliente">Nome do Cliente:</label>
                        <input type="text" name="pessoa" id="nome_cliente" class="form-control">
                    </div>

                    <div class="form-group row">
                        <input type="submit" value="Reservar" class="col-2 m-auto btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>