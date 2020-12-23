<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>CardapFy</title>
</head>

<body>
    
        <div class="container">
          <div class="jumbotron">
            <div class="row">
            <?php
                $hour = date("H"); 
                setlocale(LC_TIME,"portuguese"); 
                $hour = strftime("%d/%b/%Y"); 
                echo "<h2>CardapFy <span class='badge badge-secondary'>1.0 - $hour</span>"
                ?> 
            </h2>
            </div>
          </div>
            </br>
            <nav class="dropdownmenu">
  <ul>
    <li><a href="#">Cadastrar Alimentos</a>
      <ul id="submenu">
        <li><a href="./AliPri/CadAliPrincipal.php">Cadastrar Alimento Principal</a></li>
        <li><a href="./AliSec/CadAliSecundario.php">Cadastrar Alimento Secundário</a></li>
        <li><a href="./Mist/CadMistura.php">Cadastrar Mistura</a></li>
        <li><a href="./Salad/CadSalada.php">Cadastrar Saladas</a></li>
        <li><a href="./Ext/CadExtra.php">Cadastrar Extras</a></li>
      </ul>
    </li>
    <li><a href="#">Listar Alimentos</a>
      <ul id="submenu">
        <li><a href="./AliPri/LstAliPrincipal.php">Listar Alimento Principal</a></li>
        <li><a href="./AliSec/LstAliSecundario.php">Listar Alimento Secundário</a></li>
        <li><a href="./Mist/LstMistura.php">Listar Mistura</a></li>
        <li><a href="./Salad/LstSalada.php">Listar Saladas</a></li>
        <li><a href="./Ext/LstExtra.php">Listar Extras</a></li>
      </ul>
    </li>
    <li><a href="#">Gerar Cardapios</a>
      <ul id="submenu">
        <li><a href="./AliPri/LstAliPrincipal.php">Gerar Cardapio Semanal</a></li>
        <li><a href="./AliSec/LstAliSecundario.php">Consultar Cardapio Atual</a></li>
        <li><a href="./Mist/LstMistura.php">Gerar Prato</a></li>
        <li><a href="./Salad/LstSalada.php">Listar Saladas</a></li>
        <li><a href="./Ext/LstExtra.php">Listar Extras</a></li>
      </ul>
    </li>
  </ul>
</nav>



                
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
