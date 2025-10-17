<?php
//funfa
require_once 'shared/header.php';
require_once 'controller/autenticationController.php';
?>
<style>
    tbody {
        color: white;
    }

</style>
<body>
    <div class="container">

        <table id="tablePages" class="table table-bordered">
            <thead>
                <tr style="color: white;">
                    <th>Id</th>
                    <th>Título da página</th>
                    <th>Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php
//Abrir conexão com banco de dados
//Executar a consulta sql
//SELECT * FROM filmes;

                $result = array(
                    array('id' => 1, 'nome' => 'Pripyat', 'imagem' => 'img/rad2-g.jpg'),
                    array('id' => 2, 'nome' => 'O desastre', 'imagem' => 'img/ab-g.jpg'),
                    array('id' => 3, 'nome' => 'Impactos curto prazo', 'imagem' => 'img/ani-g.jpg'),
                    array('id' => 3, 'nome' => 'Impactos longo prazo', 'imagem' => 'img/mask-g.jpg'),
                    array('id' => 5, 'nome' => 'Pé de elefante', 'imagem' => 'img/pe-g.png'),
                    array('id' => 6, 'nome' => 'Pé de elefante: como foi feito', 'imagem' => 'img/pe2.jpg'),
                    array('id' => 7, 'nome' => 'Lições e legado', 'imagem' => 'img/park-g.jpg'),
                    array('id' => 8, 'nome' => 'Química?', 'imagem' => 'img/reat-g.jpg'),
                    array('id' => 10, 'nome' => 'Biologia?', 'imagem' => 'img/roda-g.jpg'),
                    array('id' => 9, 'nome' => 'Física?', 'imagem' => 'img/out-g.jpg'),
                );

                foreach ($result as $valor) {
                    echo ('<tr>');
                    echo ('<td>');
                    echo ($valor['id']);
                    echo ('</td>');
                    echo ('<td>');
                    echo ($valor['nome']);
                    echo ('</td>');
                    echo ('<td>');
                    echo ('<img src="' . $valor['imagem'] . '"alt="img" style="height: 240px; width: 160px;">');
                    echo ('</td>');
                    echo ('</tr>');
                }
                ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function () {
                $('#tableFilmes').dataTable();
            });
        </script>
    </div>
    <?php
    require_once './shared/footer.php';
    ?>
</body>



