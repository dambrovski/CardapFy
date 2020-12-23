<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Listagem Salada</title>
</head>

<body>
        <div class="container">
          <div class="jumbotron">
            <div class="row">
                <h2>CardapFy <span class="badge badge-secondary">1.0</span></h2>
            </div>
          </div>
            </br>
            <div class="row">
                <p>
                    <a href="../index.php" class="btn btn-warning">Voltar</a>
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../Banco/banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM extra ORDER BY idExtra ASC';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
                            echo '<th scope="row">'. $row['idExtra'] . '</th>';
                            echo '<td>'. $row['descricao'] . '</td>';
                            echo '<td width=200>';
                            echo '<a class="btn btn-info" href="EditExtra.php?id='.$row['idExtra'].'">Editar</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['idExtra'].'">Excluir</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
