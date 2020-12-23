<?php
    include '../Banco/banco.php';
    ini_set('error_reporting', E_ALL);

	
	if ( !empty($_GET['idMistura']))
            {
        $idMistura = $_REQUEST['idMistura'];
        echo $idMistura;
            }


	if (!empty($_POST))
            {
                $validacao = true;
                if ($validacao)
                        {
                            $pdo = Banco::conectar();

                            $descricao = $_POST['descricao'];
                            $stmt = $pdo->prepare("UPDATE mistura SET descricao = :DESCRICAO WHERE idMistura = :IDMISTURA");
                            
                        
                            $stmt->bindParam(":DESCRICAO", $descricao);
                            $stmt->bindParam(":IDMISTURA", $idMistura);
                            $stmt->execute();

                            
                            header("Location: LstMistura.php");
		}
	}
        else
            {
                $id = $_REQUEST['id'];
                $pdo = Banco::conectar();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $id = intval($id);
                $sql = "SELECT * FROM mistura WHERE idMistura =" . $id;
                $q = $pdo->prepare($sql);
                $q->execute();
                $data = $q->fetch(PDO::FETCH_ASSOC);
                $descricao = $data['descricao'];
                $idMistura = $data['idMistura'];
                Banco::desconectar();
    }

?>


    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" type="image/gif" href="https://i.ibb.co/tLHxMyS/animated-favicon1.gif">
		<title>Editar Alimento Principal</title>
    </head>

    <body>
    <div class="container">

<div class="span10 offset1">
                <div class="card">
                    <div class="card-header">
        <h3 class="well">Editar Alimento Principal</h3>
    </div>
                    <div class="card-body">
            <form class="form-horizontal" action="EditMistura.php?idMistura=<?php echo $idMistura?>" method="post">

        <div class="control-group">
            <label class="control-label">ID</label>
            <div class="controls">
            <input name="idMistura" readonly="true" class="form-control" size="10" type="number" placeholder="ID" value="<?php echo !empty($idMistura)?$idMistura:'';?>">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Descrição</label>
            <div class="controls">
            <input name="descricao" class="form-control" size="30" maxlength="50" type="text" placeholder="Descrição" value="<?php echo !empty($descricao)?$descricao:'';?>">
            </div>
        </div>


        <br/>
        <div class="form-actions">
            <a class="btn btn-primary" href="LstMistura.php">Voltar</a>
            <button type="submit" class="btn btn-success">Atualizar</button>
            
        </div>
    </form>
                </div>
            </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV29J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

    </html>