<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Cadastrar Salada</title>
</head>

<body>
    <div class="container">
        <div clas="span10 offset1">
          <div class="card">
            <div class="card-header">
                <h3 class="well"> Bem Vindo ao Cadastro de Saladas! </h3>
            </div>
            <div class="card-body">
            <form class="form-horizontal" action="CadSalada.php" method="post">

                <div class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                    <label class="control-label">Descrição da Salada: </label>
                    <div class="controls">
                        <input size="50" class="form-control" name="descricao" type="text" placeholder="Descrição" required="" value="<?php echo !empty($descricao)?$descricao: '';?>">
                        <?php if(!empty($descricaoErro)): ?>
                            <span class="help-inline"><?php echo $descricaoErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="form-actions">
                    <br/>
                    <a href="../index.php" class="btn btn-warning">Voltar</a>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
          </div>
        </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php
    require '../Banco/banco.php';

    if(!empty($_POST))
    {
        //Acompanha os erros de validação
        $descricaoErro = null;

        $descricao = $_POST['descricao'];
        
        //Validaçao dos campos:
        $validacao = true;
        if(empty($descricao))
        {
            $descricaoErro = 'Por favor digite a Descrição da Salada!';
            $validacao = false;
        }

        //Inserindo no Banco:
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO salada (descricao) VALUES(?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($descricao));
            Banco::desconectar();
            header("Location: ../index.php");
        }
    }
?>


