<?php

require_once('app/Models/Usuario.php');
require_once('app/Controllers/ControllerUsuario.php');

$usuarioDao = new ControllerUsuario();
if (!empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['idade']) && !empty($_POST['voto'])) {

    $votacao = new Usuario($_POST['nome'], $_POST['cpf'], $_POST['idade'], $_POST['voto']);

    $votacao->validarDados();
    $usuarioDao->createVotacao($votacao);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-primary p-5">
    <div class="container border border-2 rounded-4 p-4 shadow bg-white mb-5" style="max-width: 350px;">
        <form method="post">
            <h1 class="mb-4 text-center">Votação</h1>
            <div class="row">
                <div class="mb-3">
                    <label for="nome" class="form-label fw-bold">Nome do eleitor</label>
                    <input type="text" name="nome" class="form-control form-control-lg bg-light" value="" required>
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label fw-bold">CPF</label>
                    <input type="text" name="cpf" class="form-control form-control-lg bg-light" value="" required>
                </div>

                <div class="mb-3">
                    <label for="idade" class="form-label fw-bold">Idade</label>
                    <input type="text" name="idade" class="form-control form-control-lg bg-light" value="" required>
                </div>


                <div class="mb-3">
                    <label class="" for="lula">
                        <img src="imagens/lula.jfif" class="col-sm-5 mb-3" style="width:40%">
                        <input class="" type="radio" name="voto" id="lula" value="13" style="width: 20px; height: 20px;">
                        Lula
                    </label>
                </div>

                <div class="mb-3">
                    <label class="" for="bolsonaro">
                        <img src="imagens/bolsonaro.jfif" class="col-sm-6 mb-4" style="width:40%">
                        <input class="" type="radio" name="voto" id="bolsonaro" value="22" style="width: 20px; height: 20px;">
                        Bolsonaro
                    </label>
                </div>

                <div class="d-grid mb-4">
                    <input type="submit" value="Votar" class="btn btn-primary btn-lg">
                </div>
                
                <a class="btn btn-primary btn-lg " href="relatorio.php" target="_blank">Resultado</a>    

                <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>