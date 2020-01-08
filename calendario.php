<table class="table">
    <tr class="text-center">
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
    </tr>
    <?php for ($l = 0; $l < $linhas; $l++) : ?>
        <tr>
            <?php for ($c = 0; $c < 7; $c++) : ?>
                <?php
                $t = strtotime(($c + ($l * 7)) . " days", strtotime($dataInicio));
                $diaSemana = date("Y-m-d", $t);
                ?>
                <td class="text-center">
                    <?php
                    echo "<p class='text-info'>" . date("d/m", $t) . "</p>";
                    $diaSemana = strtotime($diaSemana);

                    foreach ($lista as $item) {
                        $dr_inicio = strtotime($item["data_inicio"]);
                        $dr_fim = strtotime($item["data_fim"]);

                        if ($diaSemana >= $dr_inicio && $diaSemana <= $dr_fim) {
                            echo "<p class='bg-danger'>" . $item["pessoa"] . "<br>" . $item["marca"] . " " . $item["modelo"] . "</p>";
                        }
                    }
                    ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>